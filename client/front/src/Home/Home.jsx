import styles from './Home.module.css'
import { useState, useEffect } from 'react'
import axios from "axios"
import backgr from '../search.png'
// import Listes from '../Listes/Listes'
import Articles from '../Articles/Article'
import background from '../bg.jpg'

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

    const [searchValue, setSearchValue] = useState('');


    const filteredArticles = articles.filter(article => {
        return article.title.toLowerCase().includes(searchValue.toLowerCase());
    });
    

    const handleSearchChange = event => {
        setSearchValue(event.target.value);
    };

    return (
        <div className={styles.home} style={{ backgroundImage:`url(${background})` }}>
            <div className={styles.box}>
            <div className={styles.searchbg} style={{ backgroundImage:`url(${backgr})` }}>
        <input className={styles.searchbar}
                type="text"
                placeholder="Search"
                value={searchValue}
                onChange={handleSearchChange}
            />
        </div>
  <h1 className={styles.categories}>Recent Articles</h1>
            <div className={styles.articleList}>
            {filteredArticles.map(article => (
                    <div key={article.id} className={styles.article}>
                        <h2>{article.title}</h2>
                        {/* <p>{article.content}</p> */}
                        <iframe width="250" height="150" src={article.mediaURL} title="YouTube video player" frameBorder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowFullscreen></iframe>
                        <div className={styles.espace}>&nbsp;</div>
                    
                    </div>
                ))}
            </div>
        </div>
            <Articles/>
        </div>
    );
}

export default Home;
