import styles from './Header.module.css';
import logo from '../globalbites_logo.png';
import Burger from '../Burger/Burger'


function Header() {
  return (
    <div className={styles.fond}>
        <div className={styles.header}>
        <div className={styles.lefth}>
            <img className={styles.logo} src={logo}/>
        </div>
        <Burger/>
        </div>

    </div>
  );
}

export default Header;