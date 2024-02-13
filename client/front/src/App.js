import styles from './App.css';
import Header from './Header/Header';
import Footer from './Footer/Footer';
import Home from './Home/home';
import Articles from './Articles/Articles';
import {Route, Link, Routes} from "react-router-dom";


function App() {
  return (
    <div className={styles.App}>
      <Header/>
      {/* <br></br> */}



      <nav>
    <Link to="/">Home</Link>
    <Link to="/articles">Articles</Link>
  </nav>

  <Routes>
    <Route exact={true} path="/" element={<Home/>}/>
    <Route exact={true} path="/articles" element={<Articles />} />
  </Routes>





      {/* <Home></Home> */}
      <Footer/>
    </div>
  );
}

export default App;
