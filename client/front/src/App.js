import styles from './App.css';
import Header from './Header/Header';
import Footer from './Footer/Footer';
import Login from './Login/Login';
import Register from './Register/Register.jsx';
import AjoutArticle from './AjoutArticle/AjoutArticle.jsx';

function App() {
  return (
    <div className={styles.App}>
      <Header/>
      <AjoutArticle/>
      <Footer/>
    </div>
  );
}

export default App;
