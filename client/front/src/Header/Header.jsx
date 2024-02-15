import styles from './Header.module.css';
import logo from '../globalbites_logo.png';
import Burger from '../Burger/Burger'
import {Route, Link, Routes} from "react-router-dom";




function Header() {
    
  return (
        <div className={styles.header}>
        <div className={styles.lefth}>
        <Link to="/"><img className={styles.logo} src={logo}/></Link>


        </div>
        <Burger/>

    </div>
  );
}

export default Header;