import styles from './App.module.css';
import Header from './Header/Header';
import Footer from './Footer/Footer';
import Login from './Login/Login';
import Register from './Register/Register.jsx';
import AjoutArticle from './AjoutArticle/AjoutArticle.jsx';
import Articles from './Articles/Articles.jsx';
import Listes from './Listes/Listes';
import Homepage from './Homepage/Homepage';

function App() {
  return (
    <div className={styles.app}>
      <Header/>
      <Homepage/>
      <Footer/>
    </div>
  );
}

export default App;
