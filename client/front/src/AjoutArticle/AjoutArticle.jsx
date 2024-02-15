import styles from './AjoutArticle.module.css';
import background from '../bg.jpg'

function NewArticle() {
  return (
    <div className={styles.ajout} style={{ backgroundImage:`url(${background})` }}>
        <div className={styles.box}>
            <h1 className={styles.title}>New Article</h1>
        <input className={styles.text} type="text" placeholder='Title'></input>
        <textarea className={styles.text} type="textarea" placeholder='Content...'></textarea>
        <a type='submit' className={styles.ajtbtn}>Submit</a>
        </div>
    </div>
  );
}

export default NewArticle;