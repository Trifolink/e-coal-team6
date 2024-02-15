import styles from './App.css';
import Header from './Header/Header';
import Footer from './Footer/Footer';

import Login from './Login/Login';
import Register from './Register/Register.jsx';
import AjoutArticle from './AjoutArticle/AjoutArticle.jsx';

import Home from './Home/home';
import Articles from './Articles/Articles';
import {Route, Link, Routes} from "react-router-dom";
function App() {
  return (
    <div className={styles.App}>
      <Header/>
      <br></br>
      <AjoutArticle/>
      <Footer/>
    </div>
  );
}

export default App;
