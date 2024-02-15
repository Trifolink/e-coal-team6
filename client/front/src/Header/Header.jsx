import styles from './Header.module.css';
import logo from '../globalbites_logo.png';
import Burger from '../Burger/Burger'


function Header() {
    
  return (
        <div className={styles.header}>
        <div className={styles.lefth}>
            <img className={styles.logo} src={logo}/>
        </div>
        <Burger/>

    </div>
  );
}

export default Header;