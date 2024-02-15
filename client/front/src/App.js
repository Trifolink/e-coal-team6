import styles from './App.module.css';
import Header from './Header/Header';
import Footer from './Footer/Footer';

import Login from './Login/Login';
import Register from './Register/Register.jsx';
// import Listes from './Listes/Listes';

import Home from './Home/Home';
import ArticlesList from './Listes/Articles';
import Article from './Articles/Article';
import NewArticle from './AjoutArticle/AjoutArticle';
import Logout from './Logout/Logout';
import {Route, Link, Routes} from "react-router-dom";
function App() {


  return (
    <div className={styles.app}>
      <Header/>



      <Routes>
        <Route exact={true} path="/" element={<Home/>}/>
        <Route exact={true} path="/articles" element={<ArticlesList/>} />
        <Route exact={true} path="/NewArticle" element={<NewArticle/>} />
        <Route exact={true} path="/Login" element={<Login/>} />
        <Route exact={true} path="/Register" element={<Register/>} />
        <Route exact={true} path="/Logout" element={<Logout/>} />
        <Route exact={true} path="/article/:id" element={<Article/>} />
      </Routes>
      {/* <div className={styles.espace}>&nbsp;</div> */}
      <Footer/>
    </div>
  );
}

export default App;
