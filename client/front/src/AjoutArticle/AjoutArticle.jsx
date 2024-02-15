import { useState } from 'react';
import axios from 'axios';
import styles from './AjoutArticle.module.css';
import background from '../bg.jpg';

function NewArticle() {
  const [thumbnailURL, setThumbnailURL] = useState('');
  const [title, setTitle] = useState('');
  const [content, setContent] = useState('');
  const [tags, setTags] = useState('');
  const [mediaType, setMediaType] = useState(''); // Nouveau state pour mediaType
  const [mediaURL, setMediaURL] = useState(''); // Nouveau state pour mediaURL
  const [leadStory, setLeadStory] = useState(''); // Nouveau state pour leadStory

  const handleSubmit = async () => {
    try {
      // Envoyer les données à l'API pour créer un nouvel article
      const response = await axios.post('http://localhost:8000/api/articles', {
        thumbnailURL,
        title,
        content,
        tags: tags.split(',').map(tag => tag.trim()), // Séparer les tags par virgule et enlever les espaces
        mediaType,
        mediaURL,
        leadStory: parseInt(leadStory) // Convertir leadStory en nombre entier
      });

      console.log('Article ajouté avec succès:', response.data);
      // Réinitialiser les champs après l'ajout de l'article
      setThumbnailURL('');
      setTitle('');
      setContent('');
      setTags('');
      setMediaType('');
      setMediaURL('');
      setLeadStory('');
    } catch (error) {
      console.error('Erreur lors de l\'ajout de l\'article:', error);
    }
  };

  return (
    <div className={styles.ajout} style={{ backgroundImage:`url(${background})` }}>
      <div className={styles.box}>
        <h1 className={styles.title}>New Article</h1>
        <input
          className={styles.text}
          type="text"
          placeholder='Thumbnail URL'
          value={thumbnailURL}
          onChange={e => setThumbnailURL(e.target.value)}
        />
        <input
          className={styles.text}
          type="text"
          placeholder='Title'
          value={title}
          onChange={e => setTitle(e.target.value)}
        />
        <textarea
          className={styles.text}
          placeholder='Content...'
          value={content}
          onChange={e => setContent(e.target.value)}
        ></textarea>
        <input
          className={styles.text}
          type="text"
          placeholder='Tags (separated by commas)'
          value={tags}
          onChange={e => setTags(e.target.value)}
        />
        <input
          className={styles.text}
          type="text"
          placeholder='Media Type'
          value={mediaType}
          onChange={e => setMediaType(e.target.value)}
        />
        <input
          className={styles.text}
          type="text"
          placeholder='Media URL'
          value={mediaURL}
          onChange={e => setMediaURL(e.target.value)}
        />
        {/* Nouveau champ pour leadStory */}
        <select
          className={styles.text}
          value={leadStory}
          onChange={e => setLeadStory(e.target.value)}
        >
          <option value="">Lead Story ?</option>
          <option value="1">Yes</option>
          <option value="0">No</option>
        </select>
        <button type='submit' className={styles.ajtbtn} onClick={handleSubmit}>Submit</button>
      </div>
    </div>
  );
}

export default NewArticle;
