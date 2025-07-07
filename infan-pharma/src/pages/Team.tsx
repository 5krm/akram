import member from '../assets/team-member.svg'

const Team = () => (
  <div className="space-y-8">
    <h2 className="text-2xl font-bold text-primary">Our Team</h2>
    <div className="grid md:grid-cols-3 gap-8">
      {['Ali', 'Sara', 'Omar'].map((name) => (
        <div key={name} className="text-center space-y-2">
          <img src={member} alt={name} className="mx-auto w-32 h-32" />
          <h3 className="font-semibold">{name}</h3>
          <p>Pharma Specialist</p>
        </div>
      ))}
    </div>
  </div>
)

export default Team
