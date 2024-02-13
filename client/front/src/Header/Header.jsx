import styles from './Header.module.css';
import logo from '../globalbites_logo.png';


function Header() {
  return (
    <div className={styles.fond}>
        <div className={styles.header}>
        <div className={styles.lefth}>
            <img className={styles.logo} src={logo}/>
        </div>
        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADwAAAA8CAYAAAA6/NlyAAAAAXNSR0IArs4c6QAAAPNJREFUaEPtmEEOgzAMBMl74RF9BLw3VdVjFWkrgx07wzmJvTt2MLRtsactpndDcHXiEIZwMQco6WJAf+RAGMLFHKCkiwHl0pJLuu97n5l+uy5Ji7ToIxTBk+GG8AAIJT1Zpd6ejkz49shBByI4yHi3sBB2szooEIRHxvfjeAVBkcK285TykwkzS0u++y1ilmaW/jqg9/Bql5ZfNz4bSSb8bBp+pyPYz+uYSBCO8d0vKoSHHw/8iPcrQyUSszSz9L+z9Go9rPRRhjW8ljJQsuQIYYt7GfZCOAMlS44QtriXYS+EM1Cy5Ahhi3sZ9kI4AyVLjm8JxEA98CGmBQAAAABJRU5ErkJggg=="/>
        </div>
    </div>
  );
}

export default Header;