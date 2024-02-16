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
              const token = JSON.parse(localStorage.getItem("user")).access_token;
              console.log('Bearer '+token)
                const response = await axios.get(
                  'http://localhost:8000/api/articles/'+params.id,
                  {headers:{Authorization: 'Bearer '+token}}
                  );
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
        <iframe className={styles.video} width="250" height="150" src={article.mediaURL} title="YouTube video player" frameBorder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowFullscreen></iframe>

        <p className={styles.content}>{article.content}</p>
    </div>
    </div>
  );
}

export default Article;