import styles from './App.css';
import Header from './Header/Header';
import Footer from './Footer/Footer';
import Home from './Home/home';

function App() {
  return (
    <div className={styles.App}>
      <Header/>
      <br></br>
      <Home></Home>
      <Footer/>
    </div>
  );
}

export default App;
