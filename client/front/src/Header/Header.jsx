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
          <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAC0AAAAtCAYAAAA6GuKaAAAAAXNSR0IArs4c6QAAAeJJREFUaEPt2E9LAkEYBvDndUkL+hR9hi4ZlgNFEXToEAilQn/u9T061NWKzLKLX6HSLh0j6NLBg0GHIIiCaJOMiRWsVXZtxtldV5g9vzP785mX2RkJA/jQAJqh0UGtmk5aJ90lAd0euj2CbA9eySwBWMXocIrGc19+pO9pTzfBHCUABoALxMxFipdMr+GeoXk5nQKnIggRG3KPWGErlOgmGHQG2I4FRDfgH9PESu+hQzuCwe/QGEnQbO7Na7A1n1J7uILr0STNH774AVZCO4Nxj/rQpJ/gntH8MpsB8XzHSlVhGHGaOnr2K+HWvNLt4QKuAZEJYvknv8HSSbuDvxPEio9BgKXQvJzZALDfAbO+eJtA5EER/Eosfys6h1B7uCQs+g6RuitihaRIoVDS/HxtDEajqro9/gPyFm29bOCSbiXEy+l1gA46EmsA2AFQF11a5zpeI3ZibaFCj1BP/8Id92deQexzwY/TnNsvkEK7tgrhGlFzJii4NDoM8J7Q/Yb3jG7CHc/R/reKErpfcGV0Vzg350J5c/nbx7MrAD9t36Zol9jxttDmK1HkSdK2D5D9rhj+23gbnGh5YP73kFhhpVJP20NJIjFYoyXCUirVSSvFJzFYJy0RllKpTlopPonBP1lrtC69HyqGAAAAAElFTkSuQmCC"/> 
                   </a>
        </div>
    </div>
  );
}

export default Header;