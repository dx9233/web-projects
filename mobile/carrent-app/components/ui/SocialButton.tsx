// components/ui/SocialButton.tsx
import React from 'react';
import { 
  TouchableOpacity, 
  StyleSheet, 
  ViewStyle,
  View,
} from 'react-native';

interface SocialButtonProps {
  icon: React.ReactNode;
  onPress: () => void;
  buttonStyle?: ViewStyle;
}

const SocialButton: React.FC<SocialButtonProps> = ({
  icon,
  onPress,
  buttonStyle,
}) => {
  return (
    <TouchableOpacity 
      style={[styles.button, buttonStyle]} 
      onPress={onPress}
      activeOpacity={0.7}
    >
      <View style={styles.iconContainer}>
        {icon}
      </View>
    </TouchableOpacity>
  );
};

const styles = StyleSheet.create({
  button: {
    width: 60,
    height: 60,
    borderRadius: 30,
    backgroundColor: '#f5f5f5',
    justifyContent: 'center',
    alignItems: 'center',
    borderWidth: 1,
    borderColor: '#ddd',
  },
  iconContainer: {
    width: 24,
    height: 24,
    justifyContent: 'center',
    alignItems: 'center',
  },
});

export default SocialButton;