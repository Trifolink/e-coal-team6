import React, { useState, useEffect } from 'react';
import axios from 'axios';
import { Link } from 'react-router-dom';
import styles from './Listes.module.css';

function ArticlesList() {
    const [articles, setArticles] = useState([]);
    const [searchValue, setSearchValue] = useState('');

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

    const filteredArticles = articles.filter(article => {
        // Filtre par titre
        if (article.title.toLowerCase().includes(searchValue.toLowerCase())) {
            return true;
        }
        // Filtre par tags
        if (article.tags.some(tag => tag.toLowerCase().includes(searchValue.toLowerCase()))) {
            return true;
        }
        return false;
    });

    const handleSearchChange = event => {
        setSearchValue(event.target.value);
    };

    return (
        <div className={styles.home}>
            <h1>Liste des articles</h1>
            <input
                type="text"
                placeholder="Rechercher"
                value={searchValue}
                onChange={handleSearchChange}
            />
            <div className={styles.articleList}>
                {filteredArticles.map(article => (
                    <div key={article.id} className={styles.article}>
                        <Link to={`/article/${article.id}`}>
                            <h2>{article.title}</h2>
                            <p>{article.content}</p>
                            <img src={article.thumbnailURL} alt={article.title} />
                        </Link>
                    </div>
                ))}
            </div>
        </div>
    );
}

export default ArticlesList;
