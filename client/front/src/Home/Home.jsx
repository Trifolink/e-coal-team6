import styles from './Home.module.css'
import { useState, useEffect } from 'react'
import axios from "axios"
import backgr from '../search.png'
// import Listes from '../Listes/Listes'
import Articles from '../Articles/Article'

function Home() {
    const [articles, setArticles] = useState([]);

    useEffect(() => {
        const fetchArticles = async () => {
            
            // try {
            //     const response = await axios.get('http://127.0.0.1:8000/api/articles');
            //     setArticles(response.data);
            // } catch (error) {
            //     console.error('Erreur lors de la récupération des articles :', error);
            // }

            try {
                const response = await axios.get('http://127.0.0.1:8000/api/articles');
                const leadStoryArticles = response.data.filter(articles => articles.leadStory == true);
                console.log(leadStoryArticles); 
                setArticles(leadStoryArticles);
            } catch (error) {
                console.error('Erreur lors de la récupération des articles :', error);
            }
            


        };

        fetchArticles();
    }, []); 

    return (
        <div className={styles.home}>
            <div className={styles.box}>
            <div className={styles.searchbg} style={{ backgroundImage:`url(${backgr})` }}>
        <input className={styles.searchbar} type="text" placeholder="Search"/>
        </div>
  <h1 className={styles.categories}>Recent Articles</h1>
            <div className={styles.articleList}>
                {articles.map(article => (
                    <div key={article.id} className={styles.article}>
                        <h2>{article.title}</h2>
                        <p>{article.content}</p>
                        <iframe width="560" height="315" src={article.mediaURL} title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                ))}
            </div>
        </div>
            <Articles/>
        </div>
    );
}

export default Home;
