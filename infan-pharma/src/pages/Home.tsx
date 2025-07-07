import Hero from '../components/Hero'

const Home = () => (
  <div className="space-y-12">
    <Hero
      title="Welcome to Anfaan"
      subtitle="Your trusted partner for importing world-class pharmaceutical products."
    />
    <section className="container mx-auto text-center space-y-4">
      <h2 className="text-2xl font-bold text-primary">Why Choose Us</h2>
      <p>
        Anfaan delivers reliable sourcing and distribution of medicines with a commitment to safety
        and regulatory compliance.
      </p>
    </section>
  </div>
)

export default Home
