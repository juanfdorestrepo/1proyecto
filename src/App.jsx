import { useState } from 'react'
import './App.css'

function App() {
  const [count, setCount] = useState(0)
  const [message, setMessage] = useState('Mi segunda prueba')

  const sumar = (a, b) => {
    return a + b
  }

  return (
    <div className="App">
      <header className="App-header">
        <h1>{message}</h1>
        <div className="card">
          <button onClick={() => setCount((count) => count + 1)}>
            Contador: {count}
          </button>
          <p>Resultado de sumar 10 + 20: {sumar(10, 20)}</p>
        </div>
        <div className="features">
          <h2>Características de React</h2>
          <ul>
            <li>Componentes reutilizables</li>
            <li>Estado reactivo con hooks</li>
            <li>Virtual DOM para rendimiento óptimo</li>
            <li>Ecosistema rico de librerías</li>
          </ul>
        </div>
      </header>
    </div>
  )
}

export default App
