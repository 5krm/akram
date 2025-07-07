import React from 'react'

interface HeroProps {
  title: string
  subtitle: string
}

const Hero: React.FC<HeroProps> = ({ title, subtitle }) => (
  <section className="bg-primary text-white py-20 text-center">
    <div className="container mx-auto space-y-4">
      <h1 className="text-4xl font-bold">{title}</h1>
      <p className="text-lg max-w-2xl mx-auto">{subtitle}</p>
    </div>
  </section>
)

export default Hero
