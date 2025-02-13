function respostaQuery() {
    const list = document.getElementById("films-list");

    filmes.forEach((filme, index) => {

        const traduzir = traducao[index]; 

        const filmCard = document.createElement("div");
        filmCard.className = "film-card";
        
        const imageUrl = `http://localhost:8000/assets/images/filme${index + 1}.png`;
        filmCard.style.backgroundImage = `url(${imageUrl})`;
        
        filmCard.onclick = function () {
            const modal = document.getElementById("modal");
            modal.style.visibility = "visible";

            const modalContent = document.getElementById("modal-content");
            modalContent.innerHTML = "";
            // Api Enviar Dados
            const dadosLog = { 
                title: traduzir.title
            };

            try {
                const enviarDados =  fetch('http://localhost:8000/apiController/salvarLog', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify(dadosLog)
                });

               
            } catch (error) {
                console.error('Erro:', error);
            }
            // Img Star Wars
            const img = document.createElement("img");
            img.src = 'http://localhost:8000/assets/images/star3.png'; 
            img.alt = "Imagem do filme";
            modalContent.appendChild(img);
            // Titulo e Descrição
            if (traduzir) {
                const filmTitle = document.createTextNode(traduzir.title);
                const filmTitleElement = document.createElement("h1");
                filmTitleElement.appendChild(filmTitle);
                modalContent.appendChild(filmTitleElement);

                const filmDescription = document.createTextNode(traduzir.opening_crawl);
                const filmDescriptionElement = document.createElement("h4");
                filmDescriptionElement.appendChild(filmDescription);
                modalContent.appendChild(filmDescriptionElement);
            }
            
            //Personagens
            const personagens = document.createElement("p");
            const titulo = document.createElement("strong");
            titulo.textContent = "Personagens:";
            personagens.appendChild(titulo);
            
            Promise.all(filme.characters.map(url => fetch(url).then(res => res.json())))
                .then(data => {
                    data.forEach(personagem => {
                        const span = document.createElement("span");
                        span.textContent = personagem.name; 
                        personagens.appendChild(span); 
                    });
                    modalContent.appendChild(personagens); 
                })
                
            //Episodio
            const episodio = document.createElement("h3");
            episodio.textContent =`Episódio: ${filme.episode_id}`;
            modalContent.appendChild(episodio);
            //Lançamento
            const lancamento = document.createElement("h3");
            lancamento.textContent = `Data de Lançamento: ${filme.release_date}`;
            modalContent.appendChild(lancamento);
            //Diretor
            const director = document.createElement("h3");
            director.textContent = `Diretor: ${filme.director}`;
            modalContent.appendChild(director);
            //Produtor/Produtores
            const producer = document.createElement("h3");
            const producersText = filme.producer.split(', ').length > 1 ? "Produtores:" : "Produtor:"; 
            producer.textContent = `${producersText} ${filme.producer}`;
            modalContent.appendChild(producer);

            //Idade Filme
            const idade = document.createElement("h3");
            idade.textContent = `Idade do Filme: ${filme.idade}`;
            modalContent.appendChild(idade);

            
        };

        list.appendChild(filmCard);
        
    });
}

window.onload = function () {
   respostaQuery(filmes);
};

window.addEventListener('keydown', hideModal);
function hideModal(sair) {
    const modal = document.getElementById("modal");

    if (sair.key === "Escape") {
        modal.style.visibility = "hidden"; 
    }
    if (sair.target === modal) {
        modal.style.visibility = "hidden"; 
    }
}
