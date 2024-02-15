import React, { useState, useEffect } from 'react';
import axios from 'axios';
import { Link } from 'react-router-dom';
import styles from './Listes.module.css';
import background from '../bg.jpg'

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
        return article.title.toLowerCase().includes(searchValue.toLowerCase());
    });
    

    const handleSearchChange = event => {
        setSearchValue(event.target.value);
    };

    return (
        <div className={styles.articles} style={{ backgroundImage:`url(${background})` }}>
            <div className={styles.box}>
            <h1 className={styles.title}>List of articles</h1>
            <input className={styles.seachbar}
                type="text"
                placeholder="Search"
                value={searchValue}
                onChange={handleSearchChange}
            />
            <div className={styles.articleList}>
                {filteredArticles.map(article => (
                    <div key={article.id} className={styles.article}>
                        <Link to={`/article/${article.id}`}>
                        <img className={styles.image} src={article.thumbnailURL} alt={article.title} />
                            <h2 className={styles.text}>{article.title}</h2>
                        </Link>
                    </div>
                ))}
            </div>
            </div>
        </div>
    );
}

export default ArticlesList;
