import banner from '../assets/banner.svg'

const Landing = () => (
  <div className="space-y-12">
    <img src={banner} alt="Banner" className="w-full" />
    <section className="text-center space-y-4 py-10">
      <h2 className="text-3xl font-bold text-primary">Modern Healthcare Solutions</h2>
      <p>
        We leverage technology and global partnerships to import quality medications
        that improve lives.
      </p>
    </section>
    <section className="grid md:grid-cols-3 gap-8">
      {[1,2,3].map((n) => (
        <div key={n} className="bg-gray-100 p-6 rounded shadow">
          <h3 className="font-semibold mb-2">Feature {n}</h3>
          <p>Highlight of our outstanding service {n}.</p>
        </div>
      ))}
    </section>
  </div>
)

export default Landing
