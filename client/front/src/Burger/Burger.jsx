import React, { useState } from 'react';
import styles from './Burger.module.css';

import Logout from '../Logout/Logout';

import Home from '../Home/Home';
// import Articles from '../Articles/Articles';
import {Route, Link, Routes} from "react-router-dom";

const BurgerMenu = () => {
  const [isOpen, setIsOpen] = useState(false);

  const [connected, setConnected] = useState(localStorage.getItem("user")?true:false)

  const toggleMenu = () => {
    setIsOpen(!isOpen);
  };

  return (
  <div className={styles.burgermenu}>
    <a className={styles.burgerIcon} onClick={toggleMenu}>
    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADwAAAA8CAYAAAA6/NlyAAAAAXNSR0IArs4c6QAAAPNJREFUaEPtmEEOgzAMBMl74RF9BLw3VdVjFWkrgx07wzmJvTt2MLRtsactpndDcHXiEIZwMQco6WJAf+RAGMLFHKCkiwHl0pJLuu97n5l+uy5Ji7ToIxTBk+GG8AAIJT1Zpd6ejkz49shBByI4yHi3sBB2szooEIRHxvfjeAVBkcK285TykwkzS0u++y1ilmaW/jqg9/Bql5ZfNz4bSSb8bBp+pyPYz+uYSBCO8d0vKoSHHw/8iPcrQyUSszSz9L+z9Go9rPRRhjW8ljJQsuQIYYt7GfZCOAMlS44QtriXYS+EM1Cy5Ahhi3sZ9kI4AyVLjm8JxEA98CGmBQAAAABJRU5ErkJggg==" />
    </a>
    
    {isOpen && (
        <nav className={`${styles.navbug} ${isOpen ? styles.open : ''}`}>
          <Link to="/">Home</Link>
          <Link to="/articles">Dishes</Link>
          <Link to="/NewArticle">New dishes</Link>
          {!connected && (
            <>
              <Link to="/Login">Login</Link>
              <Link to="/Register">Register</Link>
            </>
          )}
          {connected && <Logout setConnected={setConnected} />}
        </nav>
      )}
    </div>
  );
};

export default BurgerMenu;
