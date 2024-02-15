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
        {/* affichage de l'article {params.id} */}
        <div className={styles.box}>
        <img className={styles.image} src={article.thumbnailURL}/>

        <h1 className={styles.title}>{article.title}</h1>
        <iframe className={styles.video} width="250" height="150" src={article.mediaURL} title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

        <p className={styles.content}>{article.content}</p>
    </div>
    </div>
  );
}

export default Article;