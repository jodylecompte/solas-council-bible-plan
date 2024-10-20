// resources/js/app.tsx

import '../css/app.css';
import './bootstrap';

import { createInertiaApp } from '@inertiajs/react';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { createRoot, hydrateRoot } from 'react-dom/client';
import { AuthProvider } from './Context/AuthContext'; // Import AuthProvider

const appName = import.meta.env.VITE_APP_NAME || 'Laravel';

createInertiaApp({
  title: (title) => `${title} - ${appName}`,
  resolve: (name) => resolvePageComponent(`./Pages/${name}.tsx`, import.meta.glob('./Pages/**/*.tsx')),
  setup({ el, App, props }) {
    const auth = props.initialPage.props.auth || {}; // Extract `auth` from initial props

    const appElement = (
      <AuthProvider auth={auth}>
        <App {...props} />
      </AuthProvider>
    );

    if (import.meta.env.SSR) {
      hydrateRoot(el, appElement); // Use `hydrateRoot` for SSR
    } else {
      createRoot(el).render(appElement); // Use `createRoot` for non-SSR
    }
  },
  progress: {
    color: '#4B5563',
  },
});
