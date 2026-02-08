import React, { createContext, useState, useContext } from "react";

const PopupContext = createContext();

export const usePopup = () => {
  const context = useContext(PopupContext);
  if (!context) {
    throw new Error("usePopup must be used within PopupProvider");
  }
  return context;
};

export const PopupProvider = ({ children }) => {
  const [isOpen, setIsOpen] = useState(false);
  const [popupContent, setPopupContent] = useState(null);

  const openPopup = (content = null) => {
    setPopupContent(content);
    setIsOpen(true);
  };

  const closePopup = () => {
    setIsOpen(false);
    setPopupContent(null);
  };

  return (
    <PopupContext.Provider
      value={{ isOpen, openPopup, closePopup, popupContent }}
    >
      {children}
      <Popup />
    </PopupContext.Provider>
  );
};
