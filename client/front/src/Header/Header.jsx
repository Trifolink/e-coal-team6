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

        <div className={styles.arrow}>
          <a href="#" onClick={() => window.history.back()}>
          <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAC0AAAAtCAYAAAA6GuKaAAAAAXNSR0IArs4c6QAAAeBJREFUaEPt2LFKw0AYB/D/F+EexLdQKXYQBMHBQSgoLurQxEHfQ4iS9obo4KAuPoOgi6MILg4dKjgIgigIYis5SWuLjaTJ5ZI0gcv83d2v//u4XEoo4UMlNEOj89o1nbROekwCuj10e+TZHsKyVkC0jk6nRq7bzSL9VHu6BwYuAEwBuARjy2Tbn2nDU0MLy6oBOANgDJFCHBLnu4VE/4LPgZFrwS2EmCfOPwqHDgHfo9utkOu+pw3251Nqj1AwY1Wy7dcswEroEPADGJvLEpwYLUxzA0QngZ1qwTBmyXFeskp4MK90e4SA2xBihjh/zhosnXQo2DAq5DhPeYCl0MKytgAcBWD+G28bRI9KYM97I87v4s4Rqz1CEo67RnQd0TU1GtXown5FJFrU69MwjFac2riL/qtLG+0vULqkB6mInZ1NCHEcSOkbRPsAvhKn7A/0vDZx7h+hsZ7I9vg7S0jiV2BsKYvbXNgvkEKPaZUbMLaQF1waXQR4IvSk4YnRPXj/4h+8R2feKkroScGV0WPhQiwW8stleI6b5hqITgPH1AE1m3uxDl+JolSSHsJHe7z4X+MjcKLV0vzvIbHDSqWptoeSRGKwRkuEpVSqk1aKT2KwTloiLKVSnbRSfBKDfwBLpacumb0wcgAAAABJRU5ErkJggg=="/>
          </a>
        </div>
    </div>
  );
}

export default Header;