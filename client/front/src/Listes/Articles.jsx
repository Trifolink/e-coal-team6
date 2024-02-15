import styles from './Listes.module.css'
import { useState, useEffect } from 'react'
import axios from "axios"
import {Route, Link, Routes} from "react-router-dom";



function ArticlesList() {
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
    <Link to="/article">

                <h1>Liste des articles</h1>
                <div className={styles.articleList}>
                    {articles.map(article => (
                        <div key={article.id} className={styles.article}>
                            <h2>{article.title}</h2>
                            <p>{article.content}</p>
                            <img src={article.thumbnailURL}></img>
                        </div>
                    ))}
                </div>
            </Link>
        </div>
    );
}

export default ArticlesList;
