import styles from './Home.modules.css'
import { useState, useEffect } from 'react'
import axios from "axios"

function Home() {
    // Utilisez l'état local pour stocker les articles récupérés
    const [articles, setArticles] = useState([]);

    // Utilisez useEffect pour effectuer une action (comme récupérer des articles) lorsque le composant est monté
    useEffect(() => {
        // Fonction pour récupérer les articles depuis votre API
        const fetchArticles = async () => {
            try {
                // Effectuez une requête HTTP pour récupérer les articles depuis votre API
                const response = await axios.get('http://127.0.0.1:8000/api/articles');
                // Mettez à jour l'état local avec les articles récupérés
                setArticles(response.data);
            } catch (error) {
                console.error('Erreur lors de la récupération des articles :', error);
            }
        };

        // Appelez la fonction pour récupérer les articles
        fetchArticles();
    }, []); // Le tableau vide en tant que deuxième argument signifie que cette fonction s'exécute une fois lors du montage initial du composant

    return (
        <div className={styles.home}>
            <h1>Liste des articles</h1>
            {/* Affichez les articles récupérés */}
            <div className={styles.articleList}>
                {articles.map(article => (
                    <div key={article.id} className={styles.article}>
                        <h2>{article.title}</h2>
                        <p>{article.content}</p>
                        {/* Affichez d'autres informations sur l'article si nécessaire */}
                    </div>
                ))}
            </div>
        </div>
    );
}

export default Home;
