// app/sign-up.tsx
import React, { useState } from "react";
import {
  View,
  Text,
  TextInput,
  TouchableOpacity,
  ScrollView,
  StyleSheet,
  SafeAreaView,
} from "react-native";
import { router, Link } from "expo-router";
import CustomTextInput from "@/components/ui/CustomTextInput";
// import SocialButton from '@/components/ui/SocialButton';
import { Ionicons } from "@expo/vector-icons";

interface SignUpFormData {
  name: string;
  email: string;
  mobile: string;
  gender: string;
}

export default function SignUpScreen() {
  const [formData, setFormData] = useState<SignUpFormData>({
    name: "",
    email: "",
    mobile: "",
    gender: "",
  });

  const handleSignUp = (): void => {
    // Registration logic
    console.log("Registering with:", formData);
    // After successful registration you can redirect
    // router.push('/(tabs)');
  };

  const handleSocialSignUp = (
    provider: "google" | "facebook" | "apple",
  ): void => {
    console.log(`${provider} sign up`);
  };

  return (
    <SafeAreaView style={styles.container}>
      <ScrollView
        contentContainerStyle={styles.scrollContainer}
        showsVerticalScrollIndicator={false}
      >
        {/* Back button (optional) */}
        <TouchableOpacity
          style={styles.backButton}
          onPress={() => router.back()}
        >
          <Ionicons name="arrow-back" size={24} color="#007AFF" />
        </TouchableOpacity>

        {/* Sign up header */}
        <Text style={styles.title}>Sign up</Text>

        {/* Form */}
        <View style={styles.formContainer}>
          <CustomTextInput
            placeholder="Name"
            value={formData.name}
            onChangeText={(text: string) =>
              setFormData({ ...formData, name: text })
            }
          />

          <CustomTextInput
            placeholder="Email"
            value={formData.email}
            onChangeText={(text: string) =>
              setFormData({ ...formData, email: text })
            }
            keyboardType="email-address"
            autoCapitalize="none"
          />

          {/* Field for phone number with prefix */}
          <View style={styles.phoneContainer}>
            <View style={styles.prefixContainer}>
              <Text style={styles.prefix}>+880</Text>
            </View>
            <TextInput
              style={styles.phoneInput}
              placeholder="Your mobile number"
              value={formData.mobile}
              onChangeText={(text: string) =>
                setFormData({ ...formData, mobile: text })
              }
              keyboardType="phone-pad"
            />
          </View>

          <CustomTextInput
            placeholder="Gender"
            value={formData.gender}
            onChangeText={(text: string) =>
              setFormData({ ...formData, gender: text })
            }
          />
        </View>

        {/* Terms and Policy 
        <View style={styles.termsContainer}>
          <Text style={styles.termsText}>
            By signing up, you agree to the{' '}
            <Link href="/terms" style={styles.link}>
              Terms of service
            </Link>{' '}
            and{' '}
            <Link href="/privacy" style={styles.link}>
              Privacy policy
            </Link>
            .
          </Text>
        </View> */}

        {/* Registration button */}
        <TouchableOpacity
          style={styles.signUpButton}
          onPress={handleSignUp}
          activeOpacity={0.8}
        >
          <Text style={styles.signUpButtonText}>Sign Up</Text>
        </TouchableOpacity>

        {/* Separator */}
        <View style={styles.divider}>
          <View style={styles.dividerLine} />
          <Text style={styles.dividerText}>or</Text>
          <View style={styles.dividerLine} />
        </View>

        {/* Social buttons 
        <Text style={styles.socialTitle}>Sign Up</Text>
        <View style={styles.socialButtonsContainer}>
          <SocialButton
            icon={<Ionicons name="logo-google" size={24} color="#DB4437" />}
            onPress={() => handleSocialSignUp('google')}
          />
          <SocialButton
            icon={<Ionicons name="logo-facebook" size={24} color="#4267B2" />}
            onPress={() => handleSocialSignUp('facebook')}
          />
          <SocialButton
            icon={<Ionicons name="logo-apple" size={24} color="#000" />}
            onPress={() => handleSocialSignUp('apple')}
          />
        </View> */}

        {/* Login link 
        <View style={styles.signInContainer}>
          <Text style={styles.signInText}>
            Already have an account?{' '}
            <Link href="/sign-in" style={styles.signInLink}>
              Sign in
            </Link>
          </Text>
        </View> */}
      </ScrollView>
    </SafeAreaView>
  );
}

const styles = StyleSheet.create({
  container: {
    flex: 1,
    backgroundColor: "#fff",
  },
  scrollContainer: {
    flexGrow: 1,
    paddingHorizontal: 20,
    paddingVertical: 30,
  },
  backButton: {
    alignSelf: "flex-start",
    marginBottom: 20,
    padding: 8,
  },
  title: {
    fontSize: 32,
    fontFamily: "Inter_700Bold",
    marginBottom: 30,
    color: "#000",
  },
  formContainer: {
    marginBottom: 20,
  },
  phoneContainer: {
    flexDirection: "row",
    alignItems: "center",
    borderWidth: 1,
    borderColor: "#ddd",
    borderRadius: 8,
    marginBottom: 15,
    backgroundColor: "#fff",
  },
  prefixContainer: {
    paddingHorizontal: 15,
    borderRightWidth: 1,
    borderRightColor: "#ddd",
    backgroundColor: "#f5f5f5",
    height: "100%",
    justifyContent: "center",
  },
  prefix: {
    fontSize: 16,
    color: "#333",
    fontFamily: "Inter_400Regular",
  },
  phoneInput: {
    flex: 1,
    paddingHorizontal: 15,
    paddingVertical: 15,
    fontSize: 16,
    color: "#000",
    fontFamily: "Inter_400Regular",
  },
  termsContainer: {
    marginBottom: 25,
    paddingHorizontal: 5,
  },
  termsText: {
    fontSize: 14,
    color: "#666",
    lineHeight: 20,
    fontFamily: "Inter_400Regular",
  },
  link: {
    color: "#007AFF",
    fontFamily: "Inter_500Medium",
    textDecorationLine: "underline",
  },
  signUpButton: {
    backgroundColor: "#007AFF",
    borderRadius: 8,
    paddingVertical: 16,
    alignItems: "center",
    marginBottom: 30,
  },
  signUpButtonText: {
    color: "#fff",
    fontSize: 18,
    fontFamily: "Inter_600SemiBold",
  },
  divider: {
    flexDirection: "row",
    alignItems: "center",
    marginBottom: 25,
  },
  dividerLine: {
    flex: 1,
    height: 1,
    backgroundColor: "#ddd",
  },
  dividerText: {
    marginHorizontal: 15,
    color: "#666",
    fontSize: 14,
    fontFamily: "Inter_400Regular",
  },
  socialTitle: {
    fontSize: 24,
    fontFamily: "Inter_700Bold",
    textAlign: "center",
    marginBottom: 20,
    color: "#000",
  },
  socialButtonsContainer: {
    flexDirection: "row",
    justifyContent: "center",
    gap: 20,
    marginBottom: 30,
  },
  signInContainer: {
    alignItems: "center",
    marginTop: "auto",
  },
  signInText: {
    fontSize: 16,
    color: "#666",
    fontFamily: "Inter_400Regular",
  },
  signInLink: {
    color: "#007AFF",
    fontFamily: "Inter_600SemiBold",
    textDecorationLine: "underline",
  },
});
