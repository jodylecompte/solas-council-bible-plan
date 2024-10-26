import '../css/app.css';
import './bootstrap';

import { createInertiaApp } from '@inertiajs/react';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { createRoot, hydrateRoot } from 'react-dom/client';
import { AuthProvider } from './Context/AuthContext';

const appName = import.meta.env.VITE_APP_NAME || 'Laravel';

createInertiaApp({
  title: (title) => `${title} - ${appName}`,
  resolve: (name) => resolvePageComponent(`./Pages/${name}.tsx`, import.meta.glob('./Pages/**/*.tsx')),
  setup({ el, App, props }) {
    const initialUser = props.initialPage.props.auth?.user || undefined; // Extract `user` from props

    const appElement = (
      <AuthProvider initialUser={initialUser}>
        <App {...props} />
      </AuthProvider>
    );

    if (import.meta.env.SSR) {
      hydrateRoot(el, appElement);
    } else {
      createRoot(el).render(appElement);
    }
  },
  progress: {
    color: '#4B5563',
  },
});
