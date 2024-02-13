import styles from './Footer.module.css';

function Footer() {
  return (
    <div className={styles.footer}>
        <div className={styles.newsletter}>
        <p className={styles.subscribe}>Subscribe to our Newsletter</p>
        <div>
        <input className={styles.txt} type='text' placeholder='Your E-mail Adress'></input>
        <button className={styles.subm} type='submit'><img className={styles.arrow} src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAANlJREFUSEvt1tsNgzAMBVB7E0ahk1SdhI7STdpNOoqrKyVS0gQpfkB+yA8SIE7s2BZMkxZPcumCT8u8O9UishDRyswvza5dcEK/CXxocC/8JKI7ESFqrGHcBUMSERPuhq14CGzBw2AtHgpr8AYWkVXTjzvvbujt4llT7RWc0HcA3PtEhZ8J35j5k3f0D2MQ5GHgCRxpRrrzqlDcPKK4gJbH1aDhcKdGumgorEHDYC0aAltQN2xFI2C0HioY191C6vWlu53SX8hSDoeRAeCGR5BDIr7g0QxMO+MfF2piH3YY6SUAAAAASUVORK5CYII="/></button>
        </div>
        </div>
    </div>
  );
}

export default Footer;