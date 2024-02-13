<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-coal</title>
</head>
<body>
    <h1>Dishes on world food</h1>

    <img src="https://resize.elle.fr/original/var/plain_site/storage/images/elle-a-table/les-dossiers-de-la-redaction/dossier-de-la-redac/plat-familial-sans-four/97674745-2-fre-FR/15-recettes-de-plats-familiaux-sans-four.jpg" alt="oui">

    <div id="articles-container">
    </div>

    <div>
        <button>OK</button>
    </div>


    <script>
        fetch('/api/articles')
            .then(response => response.json())
            .then(articles => {
                const articlesContainer = document.getElementById('articles-container');

                articles.forEach(article => {
                    const articleElement = document.createElement('div');

                    let tagsHTML = '';

                    article.tags.forEach(tag => {
                        tagsHTML += `<span> ${tag.name}  </span>`;
                    });

                    articleElement.innerHTML = `
                        <h2>${article.title}</h2>
                        <p>${article.content}</p>
                        <img src="${article.thumbnailURL}" alt="Image de l'article">
                        <p>Tags: ${tagsHTML}  </p>
                    `;
                    articlesContainer.appendChild(articleElement);
                });
            })
            .catch(error => {
                console.error('Une erreur s\'est produite lors de la récupération des articles :', error);
            });
    </script>

</body>
</html>