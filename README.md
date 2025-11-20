# React Project - Mi Segunda Prueba

Este proyecto ha sido migrado de HTML/PHP a **React** usando **Vite** como herramienta de compilación.

## 🚀 Características

- ⚛️ React 19.2
- ⚡ Vite 7.2 para desarrollo rápido
- 🎨 Estilos CSS modernos
- 🔥 Hot Module Replacement (HMR)
- 📦 Optimización de producción

## 🛠️ Instalación

```bash
npm install
```

## 💻 Comandos Disponibles

### Modo Desarrollo
```bash
npm run dev
```
Inicia el servidor de desarrollo en `http://localhost:5173`

### Compilar para Producción
```bash
npm run build
```
Genera los archivos optimizados en la carpeta `dist/`

### Vista Previa de Producción
```bash
npm run preview
```
Previsualiza la versión de producción localmente

## 📁 Estructura del Proyecto

```
1proyecto/
├── src/
│   ├── App.jsx          # Componente principal
│   ├── App.css          # Estilos del componente
│   ├── main.jsx         # Punto de entrada
│   └── index.css        # Estilos globales
├── index.html           # HTML base
├── vite.config.js       # Configuración de Vite
└── package.json         # Dependencias y scripts
```

## 🎯 Migración desde PHP

El código original en PHP ha sido convertido a funciones JavaScript/React:
- Variables PHP → Estado de React (useState)
- Funciones PHP → Funciones JavaScript
- Renderizado HTML → Componentes JSX

## 📚 Recursos

- [Documentación de React](https://react.dev)
- [Documentación de Vite](https://vitejs.dev)
- [Guía de Hooks](https://react.dev/reference/react)
