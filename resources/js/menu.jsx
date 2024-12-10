
import { StrictMode } from 'react'
import { createRoot } from 'react-dom/client'

import Menu from './menu/Menu';

createRoot(document.getElementById('root')).render(
    <StrictMode>
      <Menu/>
    </StrictMode>,
  )