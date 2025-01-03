import { PropsWithChildren } from 'react';
import { usePage } from '@inertiajs/react';
import { PageProps } from '@/types';
import { Header } from './Header';

interface User {
  id: number;
  name: string;
  email: string;
}

interface CustomPageProps extends PageProps {
  authUser: User | null; // It could be null if the user isn't logged in
  canLogin: boolean;
  canRegister: boolean;
}

interface LayoutProps extends PropsWithChildren {
  backgroundColor?: string;
}

export function Layout({ children, backgroundColor }: LayoutProps) {
  const { authUser, canLogin, canRegister, backgroundOverride } = usePage<CustomPageProps>().props;

  return (
    <>
      <Header authUser={authUser} />
      <main className="flex-grow bg-white pt-12 px-12" style={{ background: backgroundColor }}>
        {children}
      </main>
      <footer className="bg-[#7C2424] text-white py-4">
        <div className="text-center">
          <div>
            Coded with ❤️ by <a href="https://jodylecompte.com">Jody LeCompte</a>
          </div>
          <div className="pt-2">
            This is an open source community effort that is not directly affiliated with The Solas Council.
          </div>
        </div>
      </footer>
    </>
  );
}
