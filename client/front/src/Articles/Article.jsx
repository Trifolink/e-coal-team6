import styles from './Articles.module.css';
import background from '../bg.jpg'
import { useParams } from 'react-router-dom';
import { useState, useEffect } from 'react';
import  axios  from 'axios';

function Article(props) {
  let params = useParams()
   
    const [article, setArticle] = useState(null);

    useEffect(() => {
        const fetchArticles = async () => {
            
            try {
                const response = await axios.get('http://127.0.0.1:8000/api/articles/'+params.id);
                setArticle(response.data);
            } catch (error) {
                console.error('Erreur lors de la récupération des articles :', error);
            }

        };

        fetchArticles();
    }, []); 







    if (!article)
    return <> </>



  return (
    <div className={styles.articles} style={{ backgroundImage:`url(${background})` }}>
        affichage de l'article {params.id}
        <div className={styles.box}>
        <img className={styles.image} src={article.thumbnailJPG}/>
        <img className={styles.image} src={article.mediaURL}/>
        <h1 className={styles.title}>{article.title}</h1>
        <p className={styles.content}>{article.content}</p>
    </div>
    </div>
  );
}

export default Article;