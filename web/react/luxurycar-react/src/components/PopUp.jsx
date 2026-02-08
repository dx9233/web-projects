import React, { useState } from "react";
import { usePopup } from "../contexts/PopupContext";
import "./PopUp.css";

const Popup = () => {
  const { isOpen, closePopup } = usePopup();
  const [formData, setFormData] = useState({
    name: "",
    phone: "",
  });

  const handleSubmit = (e) => {
    e.preventDefault();
    console.log("Отправка данных:", formData);
    // Здесь можно добавить отправку на сервер
    closePopup();
    setFormData({ name: "", phone: "" });
  };

  const handleChange = (e) => {
    setFormData({
      ...formData,
      [e.target.name]: e.target.value,
    });
  };

  if (!isOpen) return null;

  return (
    <div className="popup-overlay" onClick={closePopup}>
      <div className="popup-content" onClick={(e) => e.stopPropagation()}>
        <button className="popup-close" onClick={closePopup}>
          ×
        </button>

        <h2>Обратный звонок</h2>
        <p>Оставьте свои контакты и мы свяжемся с вами</p>

        <form onSubmit={handleSubmit}>
          <div className="form-group">
            <input
              type="text"
              name="name"
              value={formData.name}
              onChange={handleChange}
              placeholder="Ваше имя"
              required
              className="form-input"
            />
          </div>

          <div className="form-group">
            <input
              type="tel"
              name="phone"
              value={formData.phone}
              onChange={handleChange}
              placeholder="Ваш телефон"
              required
              className="form-input"
            />
          </div>

          <button type="submit" className="submit-btn">
            Отправить заявку
          </button>

          <p className="privacy-notice">
            Нажимая кнопку, вы соглашаетесь с политикой конфиденциальности
          </p>
        </form>
      </div>
    </div>
  );
};

export default Popup;
