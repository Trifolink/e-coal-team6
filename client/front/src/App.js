import styles from './App.css';
import Header from './Header/Header';
import Footer from './Footer/Footer';

import Login from './Login/Login';
import Register from './Register/Register.jsx';

import Home from './Home/home';
import Articles from './Articles/Articles';
import NewArticle from './AjoutArticle/AjoutArticle';
import {Route, Link, Routes} from "react-router-dom";
function App() {


  return (
    <div className={styles.App}>
      <Header/>
      <br></br>

      <Routes>
        <Route exact={true} path="/" element={<Home/>}/>
        <Route exact={true} path="/articles" element={<Articles/>} />
        <Route exact={true} path="/NewArticle" element={<NewArticle/>} />
      </Routes>
      <Footer/>
    </div>
  );
}

export default App;
