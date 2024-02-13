import React from 'react';
import { slide as Menu } from 'react-burger-menu';
import styles from './Burger.module.css';

const CustomBurgerIcon = () => <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADwAAAA8CAYAAAA6/NlyAAAAAXNSR0IArs4c6QAAAPNJREFUaEPtmEEOgzAMBMl74RF9BLw3VdVjFWkrgx07wzmJvTt2MLRtsactpndDcHXiEIZwMQco6WJAf+RAGMLFHKCkiwHl0pJLuu97n5l+uy5Ji7ToIxTBk+GG8AAIJT1Zpd6ejkz49shBByI4yHi3sBB2szooEIRHxvfjeAVBkcK285TykwkzS0u++y1ilmaW/jqg9/Bql5ZfNz4bSSb8bBp+pyPYz+uYSBCO8d0vKoSHHw/8iPcrQyUSszSz9L+z9Go9rPRRhjW8ljJQsuQIYYt7GfZCOAMlS44QtriXYS+EM1Cy5Ahhi3sZ9kI4AyVLjm8JxEA98CGmBQAAAABJRU5ErkJggg==" />;


const Burger = () => {
  return (
    <Menu id='react-burger-menu-btn' style={styles} customBurgerIcon={ <CustomBurgerIcon /> } width={'20%'} right>
      <a id="home" className="menu-item" href="/">Home</a>
      <a id="about" className="menu-item" href="/about">About</a>
      <a id="contact" className="menu-item" href="/contact">Contact</a>
    </Menu >
  );
};

export default Burger;