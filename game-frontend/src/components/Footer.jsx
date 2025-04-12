export default function Footer() {
  return (
    <footer className="footer-container mt-auto py-4">
      <div className="container">
        <div className="row">
          <div className="col-md-4 mb-3 mb-md-0">
            <h5 className="text-gradient">GameZone</h5>
            <p className="small">The best gaming platform with various types of interesting games to play.</p>
          </div>
          <div className="col-md-4 mb-3 mb-md-0">
            <h5 className="text-gradient">Tautan</h5>
            <ul className="list-unstyled">
              <li><a href="#home" className="footer-link">Home</a></li>
              <li><a href="#" className="footer-link">About Us</a></li>
              <li><a href="#" className="footer-link">Privasi Police</a></li>
            </ul>
          </div>
          <div className="col-md-4">
            <h5 className="text-gradient">Follow Us</h5>
            <div className="social-icons">
              <a href="#" className="social-icon"><i className="bi bi-facebook"></i></a>
              <a href="#" className="social-icon"><i className="bi bi-twitter"></i></a>
              <a href="#" className="social-icon"><i className="bi bi-instagram"></i></a>
              <a href="#" className="social-icon"><i className="bi bi-discord"></i></a>
            </div>
          </div>
        </div>
        <hr className="mt-4" />
        <div className="text-center">
          <p className="mb-0 small">&copy; {new Date().getFullYear()} GameZone. Created By Daiyan-Dev</p>
        </div>
      </div>
    </footer>
  )
}
