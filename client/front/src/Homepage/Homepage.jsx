import styles from './Homepage.module.css';
import searchbg from '../search.png'

function Homepage() {
  return (
    <div className={styles.homepage}>
        <div className={styles.searchbg} style={{ backgroundImage:`url(${searchbg})` }}>
        <input classname={styles.searchbar} type='text' placeholder='Search'></input>
        </div>
        <h1 className={styles.title}>Recent Articles</h1>
        <div className={styles.grid1}>


        <h1 className={styles.title}>Most viewed</h1>
        <div className={styles.grid2}>


        </div>
        </div>
    </div>
  );
}

export default Homepage;