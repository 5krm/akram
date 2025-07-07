import { BrowserRouter as Router, Routes, Route, Link } from 'react-router-dom'
import Home from './pages/Home'
import About from './pages/About'
import Services from './pages/Services'
import Products from './pages/Products'
import Careers from './pages/Careers'
import Contact from './pages/Contact'
import Landing from './pages/Landing'
import Team from './pages/Team'
import Blog from './pages/Blog'

function App() {
  return (
    <Router>
      <div className="min-h-screen flex flex-col">
        <nav className="bg-secondary text-white p-4">
          <div className="container mx-auto flex justify-between">
            <span className="font-bold text-xl">Anfaan</span>
            <div className="space-x-4">
              <Link to="/" className="hover:text-primary">Home</Link>
              <Link to="/landing" className="hover:text-primary">Landing</Link>
              <Link to="/about" className="hover:text-primary">About</Link>
              <Link to="/services" className="hover:text-primary">Services</Link>
              <Link to="/products" className="hover:text-primary">Products</Link>
              <Link to="/team" className="hover:text-primary">Team</Link>
              <Link to="/blog" className="hover:text-primary">Blog</Link>
              <Link to="/careers" className="hover:text-primary">Careers</Link>
              <Link to="/contact" className="hover:text-primary">Contact</Link>
            </div>
          </div>
        </nav>
        <main className="flex-grow container mx-auto p-4">
          <Routes>
            <Route path="/" element={<Home />} />
            <Route path="/landing" element={<Landing />} />
            <Route path="/about" element={<About />} />
            <Route path="/services" element={<Services />} />
            <Route path="/products" element={<Products />} />
            <Route path="/team" element={<Team />} />
            <Route path="/blog" element={<Blog />} />
            <Route path="/careers" element={<Careers />} />
            <Route path="/contact" element={<Contact />} />
          </Routes>
        </main>
        <footer className="bg-secondary text-white text-center p-4">
          &copy; {new Date().getFullYear()} Anfaan
        </footer>
      </div>
    </Router>
  )
}

export default App
