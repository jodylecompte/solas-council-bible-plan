import ApplicationLogo from '@/Components/ApplicationLogo';
import Dropdown from '@/Components/Dropdown';
import NavLink from '@/Components/NavLink';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink';
import { Link } from '@inertiajs/react';
import { useState } from 'react';

export const Header = (props: any) => {
  const [showingNavigationDropdown, setShowingNavigationDropdown] = useState(false);

  const authUser = props.authUser;

  console.log('Auth User', authUser);

  const AuthNavItems = () => <div>Logged In</div>;
  const GuestNavItems = () => <div>Guest</div>;

  return (
    <header className="bg-[#7C2424] text-white p-8 flex justify-between items-center">
      <h1 className="text-2xl font-bold">The Solas Council Reformed Bible Study Plan</h1>
      <nav>
        {authUser && <AuthNavItems />}
        {!authUser && <GuestNavItems />}
      </nav>
    </header>
  );
};
