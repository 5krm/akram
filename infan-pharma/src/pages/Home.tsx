import Hero from '../components/Hero'
import banner from '../assets/banner.svg'

const Home = () => (
  <div className="space-y-12">
    <Hero
      title="Welcome to Anfaan"
      subtitle="Your trusted partner for importing world-class pharmaceutical products."
    />
    <img src={banner} alt="banner" className="w-full" />
    <section className="container mx-auto text-center space-y-4">
      <h2 className="text-2xl font-bold text-primary">Why Choose Us</h2>
      <p>
        Anfaan delivers reliable sourcing and distribution of medicines with a commitment to safety
        and regulatory compliance.
      </p>
      <div className="grid md:grid-cols-3 gap-6 mt-6">
        {[1,2,3].map((n) => (
          <div key={n} className="p-4 border rounded shadow-sm">
            <h3 className="font-semibold mb-2">Benefit {n}</h3>
            <p>Detail about how Anfaan excels in area {n}.</p>
          </div>
        ))}
      </div>
    </section>
  </div>
)

export default Home
