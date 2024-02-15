import styles from './Article.module.css'
import { useState, useEffect } from 'react'
import axios from "axios"


function Articles() {
    const [articles, setArticles] = useState([]);

    useEffect(() => {
        const fetchArticles = async () => {
            
            try {
                const response = await axios.get('http://127.0.0.1:8000/api/articles');
                setArticles(response.data);
            } catch (error) {
                console.error('Erreur lors de la récupération des articles :', error);
            }

        };

        fetchArticles();
    }, []); 

    return (
        <div className={styles.home}>
            <h1>Liste des articles</h1>
            <div className={styles.articleList}>
                {articles.map(article => (
                    <div key={article.id} className={styles.article}>
                        <h2>{article.title}</h2>
                        <p>{article.content}</p>
                        <img  className={styles.image} src={article.thumbnailURL}></img>
                    </div>
                ))}
            </div>
        </div>
    );
}

export default Articles;
