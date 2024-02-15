import styles from './App.module.css';
import Header from './Header/Header';
import Footer from './Footer/Footer';
import Login from './Login/Login';
import Register from './Register/Register.jsx';
import AjoutArticle from './AjoutArticle/AjoutArticle.jsx';
import Articles from './Articles/Articles.jsx';
import Listes from './Listes/Listes';

function App() {
  return (
    <div className={styles.app}>
      <Header/>
      <Listes/>
      <Footer/>
    </div>
  );
}

export default App;
