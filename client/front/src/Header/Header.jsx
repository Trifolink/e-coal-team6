import styles from './Header.module.css';
import logo from '../globalbites_logo.png';
import Burger from '../Burger/Burger'
import {Route, Link, Routes} from "react-router-dom";




function Header() {
    
  return (
    <div className={styles.fond}>
        <div className={styles.header}>
        <div className={styles.lefth}>
        <Link to="/"><img className={styles.logo} src={logo}/></Link>


        </div>
        <Burger/>
        </div>

    </div>
  );
}

export default Header;