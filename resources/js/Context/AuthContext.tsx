import React, { createContext, useContext } from 'react';

interface User {
  id: number;
  name: string;
  email: string;
}

interface AuthContextType {
  user?: User;
}

const AuthContext = createContext<AuthContextType | undefined>(undefined);

export const useAuth = (): AuthContextType => {
  const context = useContext(AuthContext);
  if (!context) {
    throw new Error('useAuth must be used within an AuthProvider');
  }
  return context;
};

interface AuthProviderProps {
  auth?: AuthContextType;
  children: React.ReactNode;
}

export const AuthProvider: React.FC<AuthProviderProps> = ({ auth, children }) => {
  return <AuthContext.Provider value={auth}>{children}</AuthContext.Provider>;
};
