import { useState, useEffect } from 'react';
import styles from './Listes.module.css';

function Listes() {
  // État pour stocker les articles récupérés de l'API
  const [articles, setArticles] = useState([]);

  // Effet pour effectuer la requête HTTP une fois que le composant est monté
  useEffect(() => {
    // Fonction pour récupérer les articles depuis l'API
    const fetchArticles = async () => {
      try {
        // Effectuer la requête HTTP à l'API
        const response = await fetch('http://127.0.0.1:8000/api/articles');
        // Vérifier si la requête s'est effectuée avec succès
        if (response.ok) {
          // Extraire les données JSON de la réponse
          const data = await response.json();
          // Mettre à jour l'état avec les données des articles
          setArticles(data.articles);
        } else {
          // Gérer les erreurs si la requête échoue
          console.error('Erreur lors de la récupération des articles');
        }
      } catch (error) {
        // Gérer les erreurs liées à la requête HTTP
        console.error('Erreur de requête HTTP :', error);
      }
    };

    // Appeler la fonction de récupération des articles
    fetchArticles();
  }, []); // Le tableau de dépendances vide assure que cet effet ne s'exécute qu'une seule fois après le montage du composant

  return (
    <div className={styles.listes}>
        <div className={styles.box}></div>
      <h1>All the articles</h1>
      <div>
        {/* Afficher la liste des articles */}
        <ul>
          {articles.map(article => (
            <li key={article.id}>{article.title}</li>
          ))}
        </ul>
      </div>
    </div>
  );
}

export default Listes;