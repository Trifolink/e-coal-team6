import React, { useState } from 'react';
import styles from './Burger.module.css';

import Home from '../Home/home';
import Articles from '../Articles/Articles';
import {Route, Link, Routes} from "react-router-dom";

const BurgerMenu = () => {
  const [isOpen, setIsOpen] = useState(false);

  const toggleMenu = () => {
    setIsOpen(!isOpen);
  };




  return (

    
    
    <div className="burger-menu">
      <a className={styles.burgerIcon} onClick={toggleMenu}>
    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADwAAAA8CAYAAAA6/NlyAAAAAXNSR0IArs4c6QAAAPNJREFUaEPtmEEOgzAMBMl74RF9BLw3VdVjFWkrgx07wzmJvTt2MLRtsactpndDcHXiEIZwMQco6WJAf+RAGMLFHKCkiwHl0pJLuu97n5l+uy5Ji7ToIxTBk+GG8AAIJT1Zpd6ejkz49shBByI4yHi3sBB2szooEIRHxvfjeAVBkcK285TykwkzS0u++y1ilmaW/jqg9/Bql5ZfNz4bSSb8bBp+pyPYz+uYSBCO8d0vKoSHHw/8iPcrQyUSszSz9L+z9Go9rPRRhjW8ljJQsuQIYYt7GfZCOAMlS44QtriXYS+EM1Cy5Ahhi3sZ9kI4AyVLjm8JxEA98CGmBQAAAABJRU5ErkJggg==" />
      </a>
      
      {isOpen && (
        <div className="menu-items">
      <nav>
    <Link to="/">Home</Link>
    <Link to="/articles">Articles</Link>
  </nav>

  

        </div>
      )}
    </div>
    
  );
};

export default BurgerMenu;
